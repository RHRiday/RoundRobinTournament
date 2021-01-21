<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
    <body>
    <div class="container">
        <form action="combination.php" method="POST" autocomplete="off">
            <h3>Select how many teams are playing</h3>
            <input type="number" id="teams" name="n_team" placeholder="# of teams">
            <h3 class="invisible h3">Insert the names of the teams</h3>
            <div class='names'></div>
        </form>
    </div>
        

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="main.js"></script>
    </body>
</html>
