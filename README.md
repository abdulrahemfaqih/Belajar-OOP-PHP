# Pemrograman Berorientasi Objek

Pemrograman berorientasi objek (PBO) adalah paradigma pemrograman yang berfokus pada pemodelan dunia nyata menggunakan objek dan interaksi antar objek. Dalam PBO, objek memiliki properti (data) dan metode (fungsi) yang memungkinkan mereka untuk berinteraksi dan melakukan tindakan tertentu.

## Konsep Utama

### Property and Method

- **Property**: Variabel yang ada di dalam objek. Properti menyimpan data yang terkait dengan objek tersebut.
- **Method**: Fungsi yang ada di dalam objek. Method digunakan untuk menjalankan tindakan atau operasi terhadap objek.

### Constructor

- **Constructor**: Metode khusus yang dieksekusi saat objek dibuat dari sebuah kelas. Constructor digunakan untuk menginisialisasi properti atau melakukan tindakan lain yang perlu dilakukan saat objek baru dibuat.

### Object Type

- **Object Type**: Tipe data yang memungkinkan kita membuat objek dari sebuah kelas. Ketika objek dibuat, ia memiliki tipe data yang sesuai dengan kelas yang digunakan untuk menginstancenya.

### Inheritance

- **Inheritance**: Konsep yang memungkinkan pembuatan kelas baru (kelas turunan atau subclass) yang mewarisi properti dan metode dari kelas yang sudah ada (kelas induk atau superclass). Dengan inheritance, kelas turunan dapat menggunakan atau memperluas fungsionalitas yang ada di kelas induk tanpa perlu menulis ulang kode yang sama.

### Overriding

- **Overriding**: Konsep yang memungkinkan kelas turunan untuk menyediakan implementasi yang berbeda untuk metode yang sudah ada di kelas induk. Dengan overriding, metode di kelas turunan akan menggantikan implementasi metode di kelas induk. Hal ini memungkinkan kita untuk mengubah perilaku metode yang diwarisi dari kelas induk.

### Visibilitas

- **Visibilitas**: Tingkat aksesibilitas properti dan metode dalam sebuah kelas. Terdapat tiga jenis visibilitas yang umum digunakan:

  - **Public**: Properti atau metode yang dideklarasikan sebagai `public` dapat diakses dari mana saja, baik dari dalam kelas itu sendiri, kelas turunan, atau kode di luar kelas.
  - **Protected**: Properti atau metode yang dideklarasikan sebagai `protected` hanya dapat diakses dari dalam kelas itu sendiri atau dari kelas turunan. Properti atau metode dengan visibilitas `protected` tidak dapat diakses langsung dari kode di luar kelas atau objek tersebut.
  - **Private**: Properti atau metode yang dideklarasikan sebagai `private` hanya dapat diakses dari dalam kelas itu sendiri. Properti atau metode dengan visibilitas `private` tidak dapat diakses dari kelas turunan atau kode di luar kelas.

## Setters and Getters

- **Setters**: Metode yang digunakan untuk mengatur atau mengubah nilai properti dalam sebuah objek. Dalam setter, validasi dan manipulasi data dapat dilakukan sebelum nilai properti diubah. Setter umumnya memiliki nama yang diawali dengan "set" diikuti oleh nama properti yang ingin diubah.

- **Getters**: Metode yang digunakan untuk mengambil nilai properti dari sebuah objek. Getter umumnya memiliki nama yang diawali dengan "get" diikuti oleh nama properti yang ingin diambil.

## Static Keyword

- **catatn penting**: 
  - **1**. Memungkinkan akses langsung ke properti dan metode kelas tanpa harus membuat objek.
  - **2**. Menghemat memori dengan membagikan nilai properti yang sama di antara semua objek kelas.
  - **3**. Memungkinkan penggunaan metode bantu atau utilitas yang dapat digunakan tanpa perlu objek. 
  - **4**. Biasanya digunakan untuk membuat fungsi bantuan/helper

## Menjalankan Contoh Kode

1. Pastikan Anda memiliki lingkungan pengembangan PHP yang telah terinstal.
2. Salin kode dari file yang ingin dijalankan dan simpan dengan ekstensi `.php`.
3. Jalankan file tersebut dengan menjalankan perintah `php nama_file.php` di terminal.


