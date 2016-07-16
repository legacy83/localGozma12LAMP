Vagrant.configure("2") do |config|
    config.ssh.forward_agent = true
    config.ssh.insert_key = false

    # Ubuntu 14.04 - Trusty Tahr
    config.vm.define "localGozma12LAMP" do |localGozma12LAMP|
        localGozma12LAMP.vm.box = "geerlingguy/ubuntu1404"
        localGozma12LAMP.vm.hostname = "localGozma12LAMP"
        localGozma12LAMP.vm.network "private_network", ip: "192.168.27.12"
        config.vm.synced_folder "sites/192.168.27.12.xip.io/", "/var/www/192.168.27.12.xip.io"
        config.vm.synced_folder "sites/adminer.192.168.27.12.xip.io/", "/var/www/adminer.192.168.27.12.xip.io"
        config.vm.synced_folder "sites/www.192.168.27.12.xip.io/", "/var/www/www.192.168.27.12.xip.io"
        config.vm.synced_folder "~/PhpStormWPContent/MUPlugins/", "/var/www/www.192.168.27.12.xip.io/public_html/wp/wp-content/mu-plugins"
        config.vm.synced_folder "~/PhpStormWPContent/Plugins/", "/var/www/www.192.168.27.12.xip.io/public_html/wp/wp-content/plugins"
        config.vm.synced_folder "~/PhpStormWPContent/Themes/", "/var/www/www.192.168.27.12.xip.io/public_html/wp/wp-content/themes"
        config.vm.provision "ansible" do |ansible|
            ansible.playbook = "playbook.yml"
        end
    end
end