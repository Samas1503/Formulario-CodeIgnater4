<form class="container" method="post" action="<?php echo base_url()?>/envioPost">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <input type="text" name="recipient'sUsername" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>

    <div class="mb-3">
        <label for="basic-url" class="form-label">Your vanity URL</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" name="url" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <div class="form-text">Example help text goes outside the input group.</div>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">$</span>
        <input type="text" name="value" class="form-control" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-text">.00</span>
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        <span class="input-group-text">@</span>
        <input type="text" name="server" class="form-control" placeholder="Server" aria-label="Server">
    </div>

    <div class="input-group">
        <span class="input-group-text">With textarea</span>
        <textarea class="form-control" name="messagge" aria-label="With textarea"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Enviar</button>
</form>
