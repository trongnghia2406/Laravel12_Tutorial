- Lệnh tạo project laravel: ***composer create-project laravel/laravel tên-dự-án***
- Lệnh chạy project: ***php artisan serve***
- Lệnh kiểm tra route trong ứng dụng: ***php artisan route:list***
- Lệnh tạo view: ***php artisan make:view view-name***
**LÊNH TẠO CONTROLLER**
- Tạo controller thông thường: ***php artisan make:controller TenController***
- Tạo Resource Controller (CRUD) (Tạo sẵn các phương thức index, create, store, v.v.): 
***php artisan make:controller UserController --resource***
- Tạo Resource Controller kèm Model: ***php artisan make:controller UserController --resource --model=User***
- Tạo Single Action Controller: (Controller chỉ xử lý 1 hành động duy nhất): ***php artisan make:controller ShowDashboard --invokable***
- Tạo Controller trong thư mục con: ***php artisan make:controller Admin/UserController***
**LỆNH TẠO MIDDLEWARE:** ***php artisan make:middleware CheckAge***
**LỆNH TẠO FORM REQUEST:** ***php artisan make:request StorePostRequest***


