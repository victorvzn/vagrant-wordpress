# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "ubuntu/trusty64"

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # NOTE: This will enable public access to the opened port
  # config.vm.network "forwarded_port", guest: 80, host: 8080

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine and only allow access
  # via 127.0.0.1 to disable public access
  # config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "private_network", ip: "192.168.33.10"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # config.vm.synced_folder "../data", "/vagrant_data"

  # Use insecure_private_key for making SSH access faster.
  config.ssh.insert_key = false

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  config.vm.provider "virtualbox" do |vb|
      # vb.gui = true
      vb.memory = "1024"
  end
  #
  # View the documentation for the provider you are using for more
  # information on available options.

  # Define a Vagrant Push strategy for pushing to Atlas. Other push strategies
  # such as FTP and Heroku are also available. See the documentation at
  # https://docs.vagrantup.com/v2/push/atlas.html for more information.
  # config.push.define "atlas" do |push|
  #   push.app = "YOUR_ATLAS_USERNAME/YOUR_APPLICATION_NAME"
  # end

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
  config.vm.provision "shell", inline: <<-SHELL

    sudo apt-get update

    sudo apt-get install -y nginx

    sudo cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default_bak
    sudo cp /vagrant/vagrant-config/default /etc/nginx/sites-available
    
    sudo nginx -t

    sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password Sup3rS3cre3t'
    sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password Sup3rS3cre3t'
    sudo apt-get -y install mysql-server

    mysql -u root -pSup3rS3cre3t --execute="CREATE DATABASE wordpressdb;"
    mysql -u root -pSup3rS3cre3t --execute="CREATE USER wordpressuser@localhost IDENTIFIED BY 'Sup3rS3cre3t';"
    mysql -u root -pSup3rS3cre3t --execute="GRANT ALL PRIVILEGES ON wordpressdb.* TO wordpressuser@localhost;"
    mysql -u root -pSup3rS3cre3t --execute="FLUSH PRIVILEGES;"

    # mysqldump -u root -pSup3rS3cre3t wordpressdb > /vagrant/vagrant-config/dump_name.sql
    mysql -u root -pSup3rS3cre3t wordpressdb < /vagrant/vagrant-config/wordpressdb_20170618_base.sql

    sudo apt-get install -y php5-fpm php5-mysql php5-gd libssh2-php
    sudo sed -i "/;cgi.fix_pathinfo=1/c\cgi.fix_pathinfo=0" /etc/php5/fpm/php.ini

    sudo service nginx restart
    sudo service php5-fpm restart

  SHELL
end
