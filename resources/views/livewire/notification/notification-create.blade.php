<div>
    <h2>Create Notification</h2>
    <form wire:submit.prevent="createNotification">
        @csrf
        <div class="form-group">
            <label for="icon">Icon</label>
            <select wire:model="icon" id="icon" class="form-control">
              <option value="">-- Select Icon --</option>
              <option value="fas fa-bell">Bell</option>
              <option value="fas fa-check">Checkmark</option>
              <option value="fas fa-exclamation-circle">Exclamation Point</option>
              <option value="fas fa-info-circle">Information</option>
              <option value="fas fa-user">User</option>
              </select>
          </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea wire:model="text" class="form-control" id="text" placeholder="Enter notification text"></textarea>
        </div>
        <div class="form-group">
            <label for="alert">Alert Level</label>
            <select wire:model="alert" id="alert" class="form-control">
              <option value="">-- Select Level --</option>
              <option value="success">Success</option>
              <option value="danger">Danger</option>
              <option value="warning">Warning</option>
              <option value="info">Info</option>
            </select>
          </div>
          
        <button type="submit" class="btn btn-primary">Create Notification</button>
    </form>
</div>