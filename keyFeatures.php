<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<link href="CSS/keyFeatures.css" rel="stylesheet" type="text/css"/>
<div class ="mainContent">
    <H2>Key Features</H2>
    <p>A breakdown of the key features of the Façade Design Pattern are:</p>        
    <div class="table-wrapper">
        <table class="center">
            <tr>
                <td><strong>The Situation:</strong></td>
                <td>You wish to simplify an existing complex system and/or you need to define your own interface to the system.</td>
            </tr>
            <tr>
                <td><strong>The Problem:</strong></td>
                <td>You only need to use a small part of the existing system and/or you need to interact with the system in a specific way.</td>
            </tr>
            <tr>
                <td><strong>The Solution:</strong></td>
                <td>Use the Façade Pattern to create a new interface to the existing system.</td>
            </tr>
            <tr>
                <td><strong>Beneficiaries:</strong></td>
                <td>Anyone using the new interface to the system.</td>
            </tr>
            <tr>
                <td><strong>Implementation:</strong></td>
                <td>Define a new class (or classes) that interacts with the relevant classes of the existing system instead of calling them directly.</td>
            </tr>
            <tr>
                <td><strong>Benefits:</strong></td>
                <td>Simplify the use of the sub-system, greater control over system access.</td>   
            </tr>
            <tr>
                <td><strong>Downside:</strong></td>
                <td>Certain functionality of the sub-system may be unavailable to the client.</td>
            </tr>
        </table>
    </div>
</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */