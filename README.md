# Mi empresa - Blog

Este es un ejemplo de como hacer un Blog en Wordpres usando Vagrant.

### Server info

* UBUNTU SERVER 14.04 LTS (ubuntu/trusty64 box)
* NGINX
* PHP 5
* MYSQL


### Impotant info

* Abra en el navegador:
http://192.168.33.10
* Usuario wordpress
Username: admin / Password: [Look at Vagrantfile]
* usuario mysql
Username: root / Password: [Look at Vagrantfile]


### Vagrant

```bash
$ vagrant up
$ vagrant halt

$ vagrant ssh

$ vagrant destroy
```

### References

* https://es.wordpress.org/
* https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-ubuntu-14-04
* https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-with-nginx-on-ubuntu-14-04