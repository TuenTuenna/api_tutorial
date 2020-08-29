
## php laravel 7 fundamental api tutorial

1. 소스를 다운 받습니다.
2. composer install 로 라이브러리를 설치합니다.
3. cp .env.example .env 로 env파일을 복사합니다
4. .env 파일에 디비 명과 비번을 입력해 설정합니다.
5. php artisan migrate 를 통해 디비테이블을 만듭니다.
6. php artisan db:seed --class=TodoSeeder 를 통해 더미 데이터를 넣습니다
7. php artisan key:generate 앱 키 생성 
