## 前臺，使用 API 串接

### 安裝

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```

### 使用 API

- URL
  - admin-filament.dev-vue.com/api/v1/  


## 網站設定
- 網站設定列表
  - GET /api/v1/settings
  - 回傳
    ```json
    {
      "data": {
        "id": 1,
        "site_name": "DEMO 網站",
        "site_logo": "settings/01JKQ902K835179XK4HDPNMFJW.png",
        "site_favicon": "settings/01JKQ902KAM63GQEP3JADG90CJ.png",
        "seo_title": "DEMO 網站",
        "seo_description": "DEMO 網站",
        "seo_keywords": "DEMO 網站",
        "contact_email": null,
        "contact_phone": null,
        "address": null,
        "facebook_url": null,
        "instagram_url": null,
        "line_url": null,
        "created_at": "2025-02-10T06:32:42.000000Z",
        "updated_at": "2025-02-10T06:33:24.000000Z"
      }
    }
    ```
## 相簿
- 相簿列表
  - GET /api/v1/albums
    - 回傳
    ```json
    {
      "status": "success", 
      "data": 
      [
        {
          "id": 3,
          "title": "相簿",
          "content": "相簿", 
          "cover": null,
          "images": [
            {
              "id": 1,
              "url": "https://admin-filament.dev-vue.com/storage/album-images/9c1c6303-c16a-49a9-bccb-d169d6ac5ece.webp",
              "sort": 0
            }
          ],
          "created_at": "2025-02-08 17:33:03"
        }
      ]
    }
    ```

- 相簿詳細
  - GET /api/v1/albums/{id}
  - 回傳
    ```json
    {
    "status": "success",
    "data": 
        {
            "id": 3,
            "title": "相簿",
            "content": "相簿",
            "cover": null,
            "images": [
            {
                "id": 1,
                "url": "https://admin-filament.dev-vue.com/storage/album-images/9c1c6303-c16a-49a9-bccb-d169d6ac5ece.webp",
                "sort": 0
            }
            ],
            "created_at": "2025-02-08 17:33:03"
        }
    }
    ```
    

## 最新消息
- 最新消息列表
  - GET /api/v1/news
  - 參數
  ```json
  {
    "status": "success",
    "data": [
      {
        "id": 1,
        "title": "台灣樂博樂博機器人教育 教學策略合作說明會",
        "content": "HTM 內容",
        "image": "https://admin-filament.dev-vue.com/storage/news/news/0194eae0-7ba0-70d0-8d74-a653d82705f6.webp",
        "is_new": 1,
        "created_at": "2025-02-08 21:37:39"
      }
    ]
  }
  ```

- 最新消息詳細
  - GET /api/v1/news/{id}
  - 回傳
    ```json
    {
        "status": "success",
        "data": 
        {
            "id": 1,
            "title": "台灣樂博樂博機器人教育 教學策略合作說明會",
            "content": "HTML 內容",
            "image": null,
            "is_new": 1,
            "created_at": "2025-02-08 21:37:39"
        }
    }

    ```

## 文章
- 文章列表
  - GET /api/v1/post-categories
  - 回傳
    ```json
    {
      "data": [
        {
          "id": 1,
          "name": "關於我們",
          "posts_count": 2,
          "created_at": "2025-02-07 17:09:36"
        },
        {
          "id": 3,
          "name": "國際競賽",
          "posts_count": 1,
          "created_at": "2025-02-07 17:10:04"
        },
        {
          "id": 4,
          "name": "合作項目",
          "posts_count": 2,
          "created_at": "2025-02-07 17:10:27"
        }
      ],
      "meta": {
        "total": 3
      }
    }
    ```

- 文章詳細
  - GET /api/v1/post-categories/{category_id}/posts
  - 回傳
    ```json
    {
      "data": {
        "category": {
          "id": 1,
          "name": "關於我們"
        },
        "posts": [
          {
            "id": 1,
            "title": "關於我們",
            "excerpt": "台灣樂博樂博機器人教育\nTAIWAN ROBOROBO ROBOT EDUCATION\n&diams;國際性教育品牌且具有研發能力的教育公司...",
            "image_url": null,
            "created_at": "2025-02-08 11:37:18"
          },
          {
            "id": 2,
            "title": "教學理念",
            "excerpt": "創新&nbsp; &nbsp; 科技&nbsp; &nbsp; 教育\n&nbsp;\n我們的教育目標是不只是一個單純創造進行機器人技術、無...",
            "image_url": null,
            "created_at": "2025-02-09 11:29:06"
          }
        ]
      }
    }
    ```

## 教育課程
- 教育課程列表
  - GET /api/v1/courses
  - 回傳
    ```json
    {
      "status": "success",
      "data": [
        {
          "id": 1,
          "title": "U--ARO 初階課程 (幼兒)",
          "created_at": "2025-02-09 21:24:19"
        }
      ]
    }
    ```

- 教育課程詳細
  - GET /api/v1/courses/{id}
  - 回傳
    ```json
    {
      "status": "success",
      "data": {
        "id": 1,
        "title": "U--ARO 初階課程 (幼兒)",
        "subtitle": "UARO 編碼機器人是專為學齡前兒童設計的編碼機器人\n30分鐘的全神貫注孩子可以打造並驅動他想要的機器人",
        "image_url": "https://admin-filament.dev-vue.com/storage/courses/0194eae1-ded0-7132-818b-dd29a6229e53.webp",
        "content": "HTML 內容",
        "is_new": false,
        "meta": {
          "title": null,
          "description": null,
          "keywords": null
        },
        "images": [
          {
            "id": 1,
            "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-df70-70b7-8631-0b9cc3b84473.webp",
            "sort": 0
          },
          {
            "id": 2,
            "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e00a-728a-97ce-3166e3deab22.webp",
            "sort": 0
          },
          {
            "id": 3,
            "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e0ca-7342-b0ef-596ecabce858.webp",
            "sort": 0
          },
          {
            "id": 4,
            "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e171-7200-b9da-44b171131770.webp",
            "sort": 0
          },
          {
            "id": 5,
            "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e21b-737d-9371-4472b46f82bd.webp",
            "sort": 0
          }
        ],
        "created_at": "2025-02-09 21:24:19"
      }
    }
    ```

