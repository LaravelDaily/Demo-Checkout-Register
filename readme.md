# Laravel 5.8 Checkout Simple Demo

Simple demo-project for typical e-shop checkout process:

- You choose a product from the list and add it to cart
- You have your cart stored in session, and can click "Checkout" at any time
- Before checkout, you can login or register (both forms on the same page) 
- Finally, you place the order as a logged-in user

__Important__: this project doesn't implement payment processing, only checkout.

![Laravel Checkout screenshot](https://laraveldaily.com/wp-content/uploads/2019/07/Screen-Shot-2019-07-01-at-7.52.57-AM.png)

---

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL. 

## License

Basically, feel free to use and re-use any way you want.

---

## More from our LaravelDaily Team

- Check out our [adminpanel generator QuickAdminPanel](https:/2019.quickadminpanel.com) 
- Read our [Blog with Laravel Tutorials](https://laraveldaily.com)
- FREE E-book: [50 Laravel Quick Tips (and counting)](https://laraveldaily.com/free-e-book-40-laravel-quick-tips-and-counting/)
- Subscribe to our [YouTube channel Laravel Business](https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA)
- Enroll in our [Laravel Online Courses](https://laraveldaily.teachable.com/)
