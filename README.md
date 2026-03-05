# PHP Filesystem 📁
A small PHP project for creating, reading and editing text files.


## Features ✨
- 📄 Create new `.txt` files
- 🔍 Check file existence
- 📖 Read file contents
- ✏️ Edit existing files
- ➕ Append text to files
- 📁 Automatic `data` directory creation
- 💾 Save content using `save` command
- ⚡ Simple file management with PHP


## Technologies 🛠
- PHP
- File System Functions (`file_put_contents`, `file_get_contents`, `is_file`, `is_dir`, `mkdir`)
- Text Files (.txt)


## Installation 🚀
1. Clone the repository
git clone https://github.com/your-username/php-file-editor.git

2. Go to the project folder
cd php-file-editor

3. Make sure PHP is installed on your system
php -v

4. Run the program
php index.php


## Project Structure 📁
git PHP project/
|
|-index.php
|-data/
  |-gvenik.txt
  |-test.txt


## Author 👩‍💻
Milena  
Frontend / PHP Developer


## About the Project 💡
This project is a simple PHP file editor that demonstrates working with the **PHP File System**.  
It allows users to create, read, edit, and append text files stored in a `data` directory.  

The main goal of this project is to practice working with:

- PHP file handling functions (`file_put_contents`, `file_get_contents`, `is_file`, `is_dir`, `mkdir`)  
- Basic input/output handling  
- Simple file management logic  

It is designed as a lightweight educational project to understand how PHP can interact with the filesystem in a safe and structured way.


## 💻 Example

1️⃣ Enter file name
File name:
notes

2️⃣ Program checks if file exists
STATUS: true (File found)

3️⃣ Show file content
--- CONTENT ---
Hello

4️⃣ Ask if user wants to edit
Do you want to edit? (y/n):
y

5️⃣ Choose edit type
Choose:
1 - Replace text
2 - Append text

6️⃣ Enter new text and save
Write text and type 'save' at the end:
New text save

✅ The text is now saved to `data/notes.txt`
