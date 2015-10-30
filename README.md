# Enable CMS Blocks - Magento
Enables the cms/block type for templates for Magento 1.9.2.2 onwards.

Disabled in SUPEE-6788 only certain blocks can be rendered in CMS pages: http://magento.com/security/patches/supee-6788-technical-details

This module enable the cms/block - and it can easily be adapted to enable other blocks.

Very minimal module, everything is enabled on install.

# Install

Copy over the files into your Magento install. That's all.

# Uninstall

Delete the module and all the files. Also remove additional entries in the permission_block table. 

# Add Other Modules

Edit the install file (sql/arrow_enablecmsblocks_setup/install-0.0.0.1.php), add extra lines under

    array('block_name' => 'cms/block', 'is_allowed' => 1),
  
i.e.

    array('block_name' => 'mymodule/block', 'is_allowed' => 1),
