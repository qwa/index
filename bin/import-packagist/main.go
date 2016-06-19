package main

import "net/http"
import "log"
import "io/ioutil"
import "database/sql"
import "strings"

import _ "github.com/go-sql-driver/mysql"
import _ "github.com/mattn/go-sqlite3"

// import "path"
// import "runtime"
// import "time"
import "encoding/json"

type PackageList struct {
	PackageNames []string `packageNames`
}

func fetchUrl(url string) ([]byte, error) {
	res, err := http.Get(url)
	defer res.Body.Close()
	if err != nil {
		return nil, err
	}
	body, err := ioutil.ReadAll(res.Body)
	if err != nil {
		return nil, err
	}
	return body, nil
}

func splitPackageName(pkgName string) (string, string) {
	x := strings.SplitN(pkgName, "/", 2)
	return x[0], x[1]
}

func main() {
	var packageSource = "https://packagist.org/packages/list.json"
	content, err := fetchUrl(packageSource)
	if err != nil {
		log.Println(err)
		return
	}
	var packageList PackageList
	err = json.Unmarshal(content, &packageList)
	if err != nil {
		log.Println(err)
		return
	}

	// db, err := sql.Open("mysql", "user:password@/dbname")
	db, err := sql.Open("sqlite3", "./indexdb.sqlite3")
	if err != nil {
		log.Fatal(err)
	}
	defer db.Close()

	/*
		tx, err := db.Begin()
		if err != nil {
			log.Fatal(err)
		}
	*/

	/*
		lookup, err := db.Prepare("SELECT vendor, name FROM packages WHERE vendor = ? AND name = ?")
		_ = lookup
	*/
	insert, err := db.Prepare("INSERT INTO packages(vendor, name, package_system, package_system_source) values (?, ?, ?, ?)")
	if err != nil {
		log.Fatal(err)
	}
	defer insert.Close()
	for _, pkgName := range packageList.PackageNames {
		vendor, name := splitPackageName(pkgName)
		_, err = insert.Exec(vendor, name, "composer", packageSource)
		if err != nil {
			log.Fatal(err)
		}
		log.Println(vendor, name)
	}
}
