<h2>Įvestas vardas:</h2>
<p><?php print $_POST['name'] ?? '-'; ?></p>

<h1>Įveskite vardą</h1>
<form method="POST">
    <input name="name"  type="text" placeholder="title">
    <button name="action" value="save">Save</button>
</form>
