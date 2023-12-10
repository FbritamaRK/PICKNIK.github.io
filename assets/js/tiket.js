function generateFields(num) {
    const ticketFieldsContainer = document.getElementById('ticketFields');
    ticketFieldsContainer.innerHTML = '';
  
    for (let i = 1; i <= num; i++) {
      const fieldset = document.createElement('fieldset');
      fieldset.classList.add('border', 'p-2', 'mb-3');
      fieldset.innerHTML = `
        <legend class="font-weight-bold">Person ${i} Information</legend>
        <div class="form-group">
          <label for="name${i}">Nama:</label>
          <input type="text" class="form-control" id="name${i}" name="name${i}" required>
        </div>
        
        <div class="form-group">
          <label for="gender${i}">Jenis Kelamin:</label>
          <select class="form-control" id="gender${i}" name="gender${i}" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="email${i}">Email:</label>
          <input type="email" class="form-control" id="email${i}" name="email${i}" required>
        </div>
        
        <div class="form-group">
          <label for="phone${i}">No Telepon</label>
          <input type="tel" class="form-control" id="phone${i}" name="phone${i}" required>
        </div>
      `;
      ticketFieldsContainer.appendChild(fieldset);
    }
  }
  