<!--[Pulls in the header part of the html from a php file]-->
<?php
	$path = './';
	$page = 'References';
	include $path.'assets/inc/header.php';
	require $path.'../../../dbConnect.inc';
?>

            <div class="flex-container">
                <div class="inner-element">
                    <h1 >REFERENCES</h1>
                </div>
            </div>
            <div class="flex-container-table">
                <table>
                    <tr>
                        <th>URL</th>
                        <th>Date Accessed</th>
                        <th>Use Where?</th>
                    </tr>
                    <tr>
                        <td>https://www.w3schools.com/howto/howto_js_slideshow.asp</td>
                        <td>Nov 13th, 2019</td>
                        <td>index.html</td>
                    </tr>
                    <tr>
                        <td>https://www.w3docs.com/snippets/html/how-to-create-an-html-button-that-acts-like-a-link.html</td>
                        <td>Nov 30th, 2019</td>
                        <td>index.html, login.php, registration.php</td>
                    </tr>
                </table>
            </div>
            <footer>
                <!-- FOOTER GOES HERE -->
            </footer>
        </div>
    </body>
</html>
