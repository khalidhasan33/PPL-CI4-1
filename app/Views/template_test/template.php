<!DOCTYPE html>
<html>
<head>
    <title>Test Layout</title>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 10px;
    }

    li {
        display: inline;
    }
</style>
</head>
<body>
<table width=90% border=1 align="center">
    <tr>
        <td style="text-align: center">
            <h3>Header</h3>
        </td>
    </tr>
    <tr>
        <td>
            <ul>
                <li><a href="/v_home">Home</a></li>
                <li><a href="/v_berita">Berita</a></li>
                <li><a href="/">Mahasiswa</a></li>
            </ul>
        </td>
    </tr>
    <tr>
        <td height="300px">
            <?= $this->renderSection('content') ?>
        </td>
    </tr>
    <tr>
        <td style="text-align: center">
            <h3>Footer</h3>
        </td>
    </tr>
</table>
</body>
</html>