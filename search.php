<div class="container">
    <div class="nav-wrapper blue-grey lighten-4">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon"  for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
</div>

<table class="container striped ">
        <thead>
            <tr>
                <th class="teal lighten-4 center">ID</th>
                <th class="teal lighten-4 center">Name</th>
                <th class="teal lighten-4 center">Address</th>
                <th class="teal lighten-4 center">Phone</th>
            </tr>
        </thead>

    <tbody>
</br>
        <?php include_once 'readQuery.php'; ?>
        

    </tbody>
</table>