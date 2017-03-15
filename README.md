# yii1-codeception-ext

**For installation of yii1 module use the documentation provided here:**
<http://codeception.com/docs/modules/Yii1>

## Installation of the extension
1. Define in `_bootstrap.php` file a consant called `FRONTEND` (This will contain the path to the index.php of yii application)
2. Copy the file `_support/Helper/Yii1Ext.php` to the same directory
3. In test configuration files (`functional.suite.yml`, `unit.suite.yml`) replace the `- Yii1` module to `- \Helper\Yii1Ext:` and keep all the configurations. 

*Use the files in this repositary as an examples*