<html>
<head>
    <title>SIA: Users - View</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 14px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .blog_view_head td {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            padding: 12px 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        tr:not(.blog_view_head) td {
            padding: 10px 8px;
            border: 1px solid #ddd;
        }
        tr:not(.blog_view_head):nth-child(even) td {
            background-color: #f9f9f9;
        }
        tr:not(.blog_view_head):hover td {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Hello World!</h1>
    <div>
        <table>
            <tr class="blog_view_head">
                <td>Blog ID</td>
                <td>Message</td>
                <td>Author</td>
                <td>Date Posted</td>
                <td>Time Posted</td>
            </tr>

            <?php foreach($query as $row): ?>
                <tr>
                    <td><?= $row->id ?></td>
                    <td><?= $row->blog_message ?></td>
                    <td><?= $row->editor_name ?></td>
                    <td><?= $row->date_posted ?></td>
                    <td><?= $row->time_posted ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
