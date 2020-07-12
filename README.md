# TMT\Comments
Module Comment cho CI 4

## Cài đặt
1. cài CI4 Framework ( https://codeigniter.com/user_guide/installation/index.html )
2. cài Myth Auth ( https://github.com/lonnieezell/myth-auth ) cài xong chạy migrate all để install user DB. 
Tạo user và quản lý user bằng Myth Auth
3. Download và tạo folder Modules bên trong thư mục app của CI4. Copy source Comment vào thư mục Modules
** `> git clone [URL]`
4. Thêm autoload vào file Config\Autoload
** `>  'Modules\Comment' => APPPATH . 'Modules\Comments' `
5. Install Comment DB ( Lưu ý module này được đặt trong folder Modules )
** `> php spark migrate -n Modules\Comments`

## Configuration (optional)
1. cấu hình AUTH với Myth theo default để user login được

