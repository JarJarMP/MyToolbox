* remove all docker images 
```bash
$ docker rmi $(docker images -q)
```
* remove all docker containers
```bash
$ docker rm $(docker ps -a -q)
```
* execute a command in a running container (eg. bash) 
```bash
$ docker exec -it [container-id or container-name] /bin/bash
```