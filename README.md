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

* **Data Params for a POST request type**

  username<br>
  score

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ id : 12 }`

* **Error Response:**

  * **Code:** 404 NOT FOUND <br />

    
-------------------------------------------------------------------------------------------------

**Show Players**
----
  Returns json data about a single player.

* **URL**

  api/v1/players/id

* **Method:**

  `GET`
  
*  **URL Params**

   **Required:**
 
   `id=[integer]`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ id : 12, username : "jake276", score: 362 }`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/api/v1/players/1",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
