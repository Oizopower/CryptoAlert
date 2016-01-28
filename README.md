# CryptoAlert

Notifies by e-mail when a large transaction is being made, just for monitoring purposes.

  - Multiple coin config
  - HTML rich e-mail

### Version
0.1.2

### Installation

You need Git and PHP-cli / Sendmail or any other mail client to be installed:

```sh
$ sudo apt-get install php5-cli sendmail
$ git clone https://github.com/Oizopower/CryptoAlert.git
```

Make sure notify.php has execute rights
```sh
$ chmod +x CryptoAlert/notify.php
```


### Config example

Create a new folder under **profiles** with the coin name, for example **whitecoin** place the folowwing in it with the name **config.php** (/CryptoAlert/profiles/whitecoin/config.php)

```
<?php

    $settings = array(
        'coin'          => 'whitecoin',
        'alert'         => 1000,
        'email'         => 'email@example.com',
        'rpc_user'      => 'rpc user',
        'rpc_pass'      => 'rpc password',
        'rpc_host'      => 'rpc host',
        'rpc_port'      => 'rpc port',
    );
```
### Cryptocoin config example
/home/walletusername/CryptoAlert/notify.php {profilename} {blockhash}

Make sure the script can be run as the same user the wallet has been started.
```
server=1
daemon=1
listen=1
rpcuser=username
rpcpassword=password
rpcallowip=localhost
rpcport=15815
txindex=1
blocknotify=/home/walletusername/CryptoAlert/notify.php whitecoin %s 
```

### Todos

 - Console reports

