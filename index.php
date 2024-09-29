 <!-- First Form -->
 <form id="applianceForm" enctype="multipart/form-data">
        <label>BRANDNAME:</label>
        <input type="text" id="brand" name="brand" required><br><br>
        <label>CERTIFIEDID:</label>
        <input type="text" id="certifiedid" name="certifiedid" required><br><br>
        <label>SUPPLYBRANCH:</label>
        <input type="text" id="supplybranch" name="supplybranch" required><br><br>
        <button type="button" onclick="submitForm()">Model</button>
    </form><br><br>

    <!-- Model Form with Image Upload -->
    <form id="modelForm" enctype="multipart/form-data">
        <div id="ModelForm" style="display: none;">
            <h2>MODEL</h2>
            <label>MODELNAME:</label>
            <input type="text" id="modelname" name="modelname" required><br><br>
            <label>PRICE:</label>
            <input type="text" id="price" name="price" required><br><br>
            <label>COLOUR:</label>
            <input type="text" id="colour" name="colour" required><br><br>
            <label>CAPACITY:</label>
            <input type="text" id="capacity" name="capacity" required><br><br>
            <label>IMAGE:</label>
            <input type="file" id="image" name="image" required><br><br>
            
            <button type="button" onclick="submitModelForm()">Submit</button>
        </div>
    </form>
    
    <div id="demo"></div>
    
    <script>
        // Show Model form
        function submitForm() {
            document.getElementById('ModelForm').style.display = "block";
        }

        // Handle form submission
        function submitModelForm() {
            // Create a FormData object to handle file uploads and other data
            var formData = new FormData();
            
            formData.append("brand", document.getElementById("brand").value);
            formData.append("certifiedid", document.getElementById("certifiedid").value);
            formData.append("supplybranch", document.getElementById("supplybranch").value);
            formData.append("modelname", document.getElementById("modelname").value);
            formData.append("price", document.getElementById("price").value);
            formData.append("colour", document.getElementById("colour").value);
            formData.append("capacity", document.getElementById("capacity").value);
            formData.append("image", document.getElementById("image").files[0]);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "image.php", true);
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("demo").innerHTML = xhr.responseText;
                }
            };

            
            xhr.send(formData);
        }
    </script>
</body>
</html>
