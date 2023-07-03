# XAAMP Setup
- Install XAAMP
- Open `httpd.conf` in folder `C:\xampp\apache\conf\`
- Setup the main directory path by changing the values of `DocumentRoot` and `<Directory>`, eg:

`DocumentRoot "C:\Users\user\Desktop\memeflix\public"`
`<Directory "C:\Users\user\Desktop\memeflix\public">`

- Create a `.htaccess` file under the DcoumentRoot, in this case the `DocumentRoot` is `"C:\Users\user\Desktop\memeflix\public"`, so the full path of this file will be `"C:\Users\user\Desktop\memeflix\public\.htaccess"`
- Paste the configuration below in `.htaccess` and save the changes.

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [QSA,L]

Options -Indexes
```