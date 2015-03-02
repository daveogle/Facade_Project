<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <H2>Variations</H2>
    <p>Most of the time Facade pattern is used in order to create a simpler interface for connecting to the application you are interested in.
    However there are some variations to use cases of Facade</p>
      
    <div class="table-wrapper">
        <table>
            <tr>
                <td><strong> Reduction:</strong></td>
                <td>Facade pattern might be useful in order to reduce number of classes client application communicate with. The less dependencies there are in between client and other system,
                    the more flexible development of the system is </td>
            </tr>
            <tr>
                <td><strong> Supplement:</strong></td>
                <td>Other variation of Facade pattern is supplement of existing functions with new routines. This is more of a addition to traditional use of facade. 
                    Facade class still stores the subset of the class(number of methods)but it also contains some additional new functionality, usually based on the subset stored. </td>
            </tr>
            
        </table>
</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */