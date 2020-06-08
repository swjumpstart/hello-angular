# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

	config.vm.box = "W3Geek/whiskeybox"

	config.vm.box_version = "0.0.2"

	config.vm.hostname = "whiskeybox"

	config.vm.define "gentlejack"

	config.vm.network "forwarded_port", guest: 80, host: 8080

	config.vm.network "private_network", ip: "192.168.33.10"

	config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]

	# Optional NFS. Make sure to remove other synced_folder line too
	# config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

end