<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output method="text"/>

  <xsl:template match="/">
    Name - <xsl:value-of select="/xml/user/name"/>
    Email - <xsl:value-of select="/xml/user/email"/>
    Username - <xsl:value-of select="/xml/user/username"/>
    Phone - <xsl:value-of select="/xml/user/phone"/>
  </xsl:template>

</xsl:stylesheet>