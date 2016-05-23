# lumen leaderboard RESTful api

**lumen leaderboard for games**
----

* **URL**

  api/v1/players

* **Method:**
  
  <_The request type_>

  `GET` | `POST` | `DELETE` | `PUT`
  
*  **URL Params**

   **Required:**
 
   `id=[integer]`

   **Optional:**
 
   `photo_id=[alphanumeric]`

* **Data Params**

  <username>
  <score>

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ id : 12 }`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
