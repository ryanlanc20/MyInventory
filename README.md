# Personal inventory management system (Created using CakePHP)

This inventory management system uses the CakePHP framework, and utilizes the MVC pattern.
It allows people to create their own accounts and manage their personal belongings, including serial numbers, descriptions, etc...

## Running the project

This project contains a built-in server; there is no need to download/host your own webserver.

To start the webserver, you can type the following command in command prompt/terminal. 
Except, of course, 'bin/cake' will not work on windows and needs to be swapped for 'bin\cake'.
The port flag -p specifies the port number that the webserver can be accessed by. In this case,
8765 is specified, meaning that web requests must be sent to http://<IP_OR_HOSTNAME>:8765. 
However, be aware that terminating/restarting the web server rapidly may require a change in port number on UNIX platforms.
It can take some time for UNIX systems to release ports.

```bash
bin/cake server -p 8767
```

Typically, you can access the webserver using http://localhost:8765
Alternatively, you can use http://127.0.0.1:8765 instead.

# Some important notes from the CakePHP skeleton readme

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit the environment specific `config/app_local.php` and setup the 
`'Datasources'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.

## Layout

The app skeleton uses [Milligram](https://milligram.io/) (v1.3) minimalist CSS
framework by default. You can, however, replace it with any other library or
custom styles.
