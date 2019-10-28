<?xml version = "1.0" encoding = "UTF-8"?>
<xsl:stylesheet version = "1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>

<body>
  <h2 align="center">My Groceries</h2>
  <table border="2px bold blue" align="center">
    <tr bgcolor="cyan">
      <th>Item</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Brand</th>
    </tr>
    <xsl:for-each select="groceries/grocery">
    <tr bgcolor="pink">
      <td><xsl:value-of select="item"/></td>
      <td><xsl:value-of select="quantity"/></td>
      <td><xsl:value-of select="price"/></td>
      <td><xsl:value-of select="brand"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>

