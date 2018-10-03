
    <h2>Hexidecimal Reserves</h2>
    <table>
      <tr>
        <td><</td>
        <td>&lt;</td>
      </tr>
      <tr>
        <td>></td>
        <td>&gt;</td>
      </tr>
      <tr>
        <td>&</td>
        <td>&amp;</td>
      </tr>
      <tr>
        <td>"</td>
        <td>&quot;</td>
      </tr>
    </table>

    <h2>HTML Encoding</h2>
    <?php //htmlspecialchars(); ?>
    cleans the main html special characters

    <?php //htmlentities(); ?>
    cleans the shit out of any character

    <h2>Raw Encode</h2>
    <?php //rawurlencode(); ?>
    <ul>
      <li><u>path</u> is before the "?"</li>
      <li>spaces must be encoded as %20</li>
      <li>generally more compatible</li>
    </ul>
    <?php //urlencode(); ?>
    <ul>
      <li><u>query string</u> is the part after the "?"</li>
      <li>spaces are better encoded as "+"</li>
    </ul>
