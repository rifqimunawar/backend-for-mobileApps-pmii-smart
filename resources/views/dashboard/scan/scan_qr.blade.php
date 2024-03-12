<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Scanner</title>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <style>
        .center {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            /* Menetapkan tata letak kolom */
        }

        #preview {
            margin-top: 20px;
            /* Jarak antara teks dan video */
        }
    </style>
</head>

<body>
    <div class="center">
        <h1>Tiket Scanner</h1>
        <h3 id="userId" hidden>{{ $id_user->id }}</h3>
        <video id="preview"></video>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // Get user ID from HTML
        let userId = document.getElementById('userId').innerText.trim();

        console.log(userId)

        // Check if browser supports getUserMedia
        if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
            alert('Browser tidak mendukung fitur kamera yang diperlukan.');
        } else {
            // Request camera access
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function(stream) {
                    let scanner = new Instascan.Scanner({
                        video: document.getElementById('preview')
                    });
                    scanner.addListener('scan', function(content) {
                        // Send the scanned QR code content and user ID to the server using AJAX POST request
                        fetch("{{ route('qr.scan.result') }}", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                    "X-CSRF-TOKEN": "{{ csrf_token() }}" // Add CSRF token for Laravel POST requests
                                },
                                body: JSON.stringify({
                                    result: content,
                                    userId: userId // Include the user ID in the request body
                                }) // Send scanned content and user ID in JSON format
                            })
                            .then(response => response.json()) // Parse the JSON response
                            .then(data => {
                                console.log(data); // You can handle the response here
                                // Display SweetAlert2 notification based on the response
                                Swal.fire({
                                    icon: data.icon,
                                    title: data.title,
                                    text: data.message
                                });
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                    });

                    Instascan.Camera.getCameras().then(function(cameras) {
                        if (cameras.length > 0) {
                            scanner.start(cameras[0]);
                        } else {
                            console.error('No cameras found.');
                        }
                    }).catch(function(e) {
                        console.error(e);
                    });

                    // Attach the camera stream to the video element
                    document.getElementById('preview').srcObject = stream;
                })
                .catch(function(error) {
                    console.error('Error accessing camera:', error);
                });
        }
    </script>

</body>

</html>
