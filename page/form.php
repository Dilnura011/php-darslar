<?php
    include('header.php');
?>
    <div class="form-container">
        <h2>Aloqa Formasi</h2>
        <form action="data.php" method="POST">
            <label for="name">Ism va familiya:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Elektron pochta:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Xabar:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Yuborish</button>
        </form>
    </div>
<?php
    include('footer.php');
?>