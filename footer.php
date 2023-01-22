<div class="col-md-4">
    <aside class="top-10">
        <h4 class="text-center">En iyi oyuncular</h4>
        <table class="table border-bottom-none">
            <thead>
            <th></th>
            <th>İsim</th>
            <th>Rating</th>
            </thead>
            <tbody>
            <?php for($i=0; $i<=$fideRatingBot->length-1; $i++): ?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $fideRatingBot->names[$i]; ?></td>
                <td><?php echo $fideRatingBot->ratings[$i]; ?></td>
            </tr>
            <?php endfor; ?>
            </tbody>
        </table>
    </aside>
    <aside class="most-reading">
        <h4 class="text-center">En çok Okunanlar</h4>
        <ul class="most-reading-list">
            <?php foreach($contentsV->data as $data): ?>
            <li>
                <a href="/blog/<?php echo $data["id"];?>"><?php echo $data["title"]; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </aside>
</div>
</div>
</main>

<footer class="container-fluid">
    <div class="row">
        <p>Tüm hakları saklıdır. <br><br> satranc.keremmert.net</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
