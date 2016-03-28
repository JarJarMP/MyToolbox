### Linux commands

* motherboard info
```bash
$ sudo dmidecode -t 2
```

* cpu info
```bash
$ sudo dmidecode -t 4
```

* disk space
```bash
$ df
```

* set permission for all files in a folder
```bash
$ sudo find /home/peter/www/site/folder/folder -type f -exec chmod 777 {} \;
```

* returns an array with the names of all modules compiled and loaded
```bash
$ php -r "print_r(get_loaded_extensions());"
```
