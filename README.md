# Laravel 11 密切關注伺服器健康狀況

可以使用健康狀況資訊當做診斷協助來偵測並更正問題，同時也能夠協助找出潛在的問題並避免發生，密切關注的目標是要讓例外情形未獲得偵測（亦即未解決）的時間減至最少。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行 __Artisan__ 指令的 __server-monitor:add-host__ 來新增主機。
```sh
$ php artisan server-monitor:add-host
```
- 執行 __Artisan__ 指令的 __server-monitor:list-checks__ 來列出所有設定的健康檢查。
```sh
$ php artisan server-monitor:list-checks
```
- 執行 __Artisan__ 指令的 __server-monitor:run-checks__ 來執行健康檢查。
```sh
$ php artisan server-monitor:run-checks
```

----

## 畫面截圖
![](https://i.imgur.com/8tAlsoG.png)
> 系統將提示您輸入主機名稱、SSH 使用者和用於連接伺服器的連接埠以及應執行的檢查

![](https://i.imgur.com/In9CrWX.png)
> 列出所有設定的健康檢查以了解伺服器健康情況

![](https://i.imgur.com/wV2Gcb6.png)
> 手動執行健康檢查
