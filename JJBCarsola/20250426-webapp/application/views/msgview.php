<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIA: Users - View</title>
  <style>
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      background-color: #f5f7fa;
      color: #333;
      margin: 0;
      padding: 20px;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      padding: 25px;
    }
    
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      padding-bottom: 15px;
      border-bottom: 1px solid #e0e0e0;
    }
    
    h1 {
      font-weight: 600;
      color: #2c3e50;
      margin: 0;
      font-size: 24px;
    }
    
    .actions {
      display: flex;
      gap: 10px;
    }
    
    .btn {
      background-color: #3498db;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      transition: background-color 0.2s;
    }
    
    .btn:hover {
      background-color: #2980b9;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 14px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    }
    
    .table-header td {
      background-color: #2c3e50;
      color: white;
      font-weight: 600;
      padding: 14px 16px;
      border: 1px solid #2c3e50;
      text-align: left;
    }
    
    tr:not(.table-header) td {
      padding: 12px 16px;
      border-bottom: 1px solid #e0e0e0;
      vertical-align: middle;
    }
    
    tr:not(.table-header):nth-child(even) td {
      background-color: #f8f9fb;
    }
    
    tr:not(.table-header):hover td {
      background-color: #eef2f7;
    }
    
    .pagination {
      display: flex;
      justify-content: flex-end;
      margin-top: 20px;
      gap: 5px;
    }
    
    .page-btn {
      border: 1px solid #ddd;
      padding: 6px 12px;
      cursor: pointer;
      background-color: #fff;
      border-radius: 4px;
    }
    
    .page-btn.active {
      background-color: #3498db;
      color: white;
      border-color: #3498db;
    }
    
    .id-column {
      width: 8%;
    }
    
    .message-column {
      width: 40%;
    }
    
    .author-column {
      width: 18%;
    }
    
    .date-column, .time-column {
      width: 17%;
    }
    
    .footer {
      margin-top: 25px;
      text-align: right;
      font-size: 12px;
      color: #7f8c8d;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Blog Posts Management</h1>
      <div class="actions">
        <button class="btn">New Post</button>
        <button class="btn" style="background-color: #7f8c8d;">Export</button>
      </div>
    </div>
    
    <div>
      <?php
      // print_r($query);
      ?>
      <table>
        <tr class="table-header">
          <td class="id-column">Blog ID</td>
          <td class="message-column">Message</td>
          <td class="author-column">Author</td>
          <td class="date-column">Date Posted</td>
          <td class="time-column">Time Posted</td>
        </tr>
        <?php
        foreach($query as $row){
          echo "<tr>";
          echo "<td>{$row->id}</td>";
          echo "<td>{$row->blog_message}</td>";
          echo "<td>{$row->editor_name}</td>";
          echo "<td>{$row->date_posted}</td>";
          echo "<td>{$row->time_posted}</td>";
          echo "</tr>";
        }
        ?>
      </table>
      
      <div class="pagination">
        <button class="page-btn">Previous</button>
        <button class="page-btn active">1</button>
        <button class="page-btn">2</button>
        <button class="page-btn">3</button>
        <button class="page-btn">Next</button>
      </div>
    </div>
    
    <div class="footer">
      SIA Management System • Last updated: <?php echo date("Y-m-d"); ?>
    </div>
  </div>
</body>
</html>