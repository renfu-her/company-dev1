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
        "data": 
        [
            {
                "id": 1,
                "title": "台灣樂博樂博機器人教育 教學策略合作說明會",
                "content": "HTML 內容",
                "image": null,
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
          "id": 4,
          "name": "合作項目",
          "posts_count": 2,
          "created_at": "2025-02-07 17:10:27"
        },
        {
          "id": 3,
          "name": "國際競賽",
          "posts_count": 1,
          "created_at": "2025-02-07 17:10:04"
        },
        {
          "id": 1,
          "name": "關於我們",
          "posts_count": 2,
          "created_at": "2025-02-07 17:09:36"
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
          "id": 2,
          "title": "教學理念",
          "excerpt": "創新&nbsp; &nbsp; 科技&nbsp; &nbsp; 教育\n&nbsp;\n我們的教育目標是不只是一個單純創造進行機器人技術、無...",
          "image_url": null,
          "created_at": "2025-02-09 11:29:06"
        },
        {
          "id": 1,
          "title": "關於我們",
          "excerpt": "台灣樂博樂博機器人教育\nTAIWAN ROBOROBO ROBOT EDUCATION\n&diams;國際性教育品牌且具有研發能力的教育公司...",
          "image_url": null,
          "created_at": "2025-02-08 11:37:18"
        }
      ]
    },
    "meta": {
      "current_page": 1,
      "total": 2,
      "per_page": 10
    }
  }
    ```

## 教育課程
- 教育課程列表
  - GET /api/v1/courses
  - 回傳
    ```json
    {
      "data": [
        {
          "id": 1,
          "title": "U--ARO 初階課程 (幼兒)",
          "subtitle": "UARO 編碼機器人是專為學齡前兒童設計的編碼機器人\n30分鐘的全神貫注孩子可以打造並驅動他想要的機器人",
          "image_url": "https://admin-filament.dev-vue.com/storage/courses/0194eae1-ded0-7132-818b-dd29a6229e53.webp",
          "is_new": false,
          "created_at": "2025-02-09T13:24:19.000000Z",
          "images": [
            {
              "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-df70-70b7-8631-0b9cc3b84473.webp",
              "sort": 0
            },
            {
              "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e00a-728a-97ce-3166e3deab22.webp",
              "sort": 0
            },
            {
              "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e0ca-7342-b0ef-596ecabce858.webp",
              "sort": 0
            },
            {
              "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e171-7200-b9da-44b171131770.webp",
              "sort": 0
            },
            {
              "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e21b-737d-9371-4472b46f82bd.webp",
              "sort": 0
            }
          ]
        }
      ],
      "meta": {
        "current_page": 1,
        "total": 1,
        "per_page": 20
      }
    }
    ```

- 教育課程詳細
  - GET /api/v1/courses/{id}
  - 回傳
    ```json
    {
      "data": {
        "id": 1,
        "title": "U--ARO 初階課程 (幼兒)",
        "subtitle": "UARO 編碼機器人是專為學齡前兒童設計的編碼機器人\n30分鐘的全神貫注孩子可以打造並驅動他想要的機器人",
        "content": "<p>您人生開始的第一個編碼機器人UARO</p>\n<p>初階課程【適用學齡前4-7歲】</p>\n<p>&nbsp;</p>\n<p>模塊程式編碼機器人：UARO</p>\n<p>&nbsp;</p>\n<p>►您人生開始的第一個編碼機器人UARO</p>\n<p>&nbsp; &nbsp;具有專利技術運用帶有編碼程式模塊進行建造而設計的</p>\n<p>&nbsp;</p>\n<p>►不需要電腦教學能進行演算法概念開發的課程</p>\n<p>&nbsp; &nbsp;是專為學齡前兒童設計的不須電腦電編碼的教育課程保護幼兒的眼睛。</p>\n<p>&nbsp;</p>\n<p>►獨特的組裝結構</p>\n<p>&nbsp; &nbsp;透過簡單的方式就能創建富有想像力的主題，同時應用簡單方便的編碼系統來促進計算思維的學習。</p>\n<p>&nbsp;</p>\n<p>►與 Nuri 課程結合的教育</p>\n<p>&nbsp; &nbsp;UARO的所有教育計畫都經過精心設計與Nuri課程的五個領域保持一致，</p>\n<p>&nbsp; &nbsp;特別針對4至7歲的兒童CODINGD課程研發設計。</p>",
        "image_url": "https://admin-filament.dev-vue.com/storage/courses/0194eae1-ded0-7132-818b-dd29a6229e53.webp",
        "is_new": false,
        "created_at": "2025-02-09T13:24:19.000000Z",
        "images": [
          {
            "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-df70-70b7-8631-0b9cc3b84473.webp",
            "sort": 0
          },
          {
            "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e00a-728a-97ce-3166e3deab22.webp",
            "sort": 0
          },
          {
            "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e0ca-7342-b0ef-596ecabce858.webp",
            "sort": 0
          },
          {
            "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e171-7200-b9da-44b171131770.webp",
            "sort": 0
          },
          {
            "image_url": "https://admin-filament.dev-vue.com/storage/course-images/0194eae1-e21b-737d-9371-4472b46f82bd.webp",
            "sort": 0
          }
        ]
      }
    }
    ```

