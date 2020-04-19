# **Symfony Framework**

- เป็น framwork ของ PHP ที่ทำให้เรา bundle webapplication ได้เร็วมากขึ้น

## MVC Pattern

![https://s3-us-west-2.amazonaws.com/secure.notion-static.com/3ff524e9-7929-4b56-a8d7-547ad8128cf4/Screen_Shot_2563-04-19_at_11.33.09.png](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/3ff524e9-7929-4b56-a8d7-547ad8128cf4/Screen_Shot_2563-04-19_at_11.33.09.png)

- Routes
  - เป็นตัว Mapping URL ว่าจะไปเรียกใช้ controller ตัวไหน
- Controllers
  - เป็นตัวกลางในการจัดการ ว่าจะไป เรียก Entities และ Views
  - การระบุว่ามันคือ controller จะถูกประกาศไว้ใน
    - src/Controllers/NameController.php
- Entities (Model)
  - เป็น model ที่ไว้จัดการเกี่ยวกับ Database
  - src/Entities/NameEntities.php
- Views
  - เป็นตัว given HTML to the user
  - src/Templates/Name.html.twig


## Folder Structure
    - bin              run unittest/command
    - config        run config file
    - public         server render by read index.php file
    - src              source development
    - var              cache and session
    - vendor       external php libraries

## Install
1. Install symfony cli by command
  `curl -sS [https://get.symfony.com/cli/installer](https://get.symfony.com/cli/installer) | bash`
2. Add to cli to .zsh
  ```
    ### Symfony CLI
    export PATH="$HOME/.symfony/bin:$PATH"
  ```
3. Use symfony cli create project
  `symfony new --full todoList`
4. It will generate todoList project
![https://s3-us-west-2.amazonaws.com/secure.notion-static.com/5cd3db03-7374-4daf-a273-b898c2d4f9e4/Screen_Shot_2563-04-19_at_12.33.06.png](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/5cd3db03-7374-4daf-a273-b898c2d4f9e4/Screen_Shot_2563-04-19_at_12.33.06.png)