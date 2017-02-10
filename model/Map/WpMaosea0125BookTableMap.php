<?php

namespace Map;

use \WpMaosea0125Book;
use \WpMaosea0125BookQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'wp_maosea0125_book' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class WpMaosea0125BookTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.WpMaosea0125BookTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'wp_maosea0125_book';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\WpMaosea0125Book';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'WpMaosea0125Book';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the id field
     */
    const COL_ID = 'wp_maosea0125_book.id';

    /**
     * the column name for the isbn field
     */
    const COL_ISBN = 'wp_maosea0125_book.isbn';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'wp_maosea0125_book.name';

    /**
     * the column name for the cover field
     */
    const COL_COVER = 'wp_maosea0125_book.cover';

    /**
     * the column name for the author field
     */
    const COL_AUTHOR = 'wp_maosea0125_book.author';

    /**
     * the column name for the publisher field
     */
    const COL_PUBLISHER = 'wp_maosea0125_book.publisher';

    /**
     * the column name for the original_name field
     */
    const COL_ORIGINAL_NAME = 'wp_maosea0125_book.original_name';

    /**
     * the column name for the translator field
     */
    const COL_TRANSLATOR = 'wp_maosea0125_book.translator';

    /**
     * the column name for the publish_date field
     */
    const COL_PUBLISH_DATE = 'wp_maosea0125_book.publish_date';

    /**
     * the column name for the page field
     */
    const COL_PAGE = 'wp_maosea0125_book.page';

    /**
     * the column name for the price field
     */
    const COL_PRICE = 'wp_maosea0125_book.price';

    /**
     * the column name for the binding field
     */
    const COL_BINDING = 'wp_maosea0125_book.binding';

    /**
     * the column name for the series field
     */
    const COL_SERIES = 'wp_maosea0125_book.series';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'wp_maosea0125_book.description';

    /**
     * the column name for the author_description field
     */
    const COL_AUTHOR_DESCRIPTION = 'wp_maosea0125_book.author_description';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'wp_maosea0125_book.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'wp_maosea0125_book.updated_at';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Isbn', 'Name', 'Cover', 'Author', 'Publisher', 'OriginalName', 'Translator', 'PublishDate', 'Page', 'Price', 'Binding', 'Series', 'Description', 'AuthorDescription', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('id', 'isbn', 'name', 'cover', 'author', 'publisher', 'originalName', 'translator', 'publishDate', 'page', 'price', 'binding', 'series', 'description', 'authorDescription', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(WpMaosea0125BookTableMap::COL_ID, WpMaosea0125BookTableMap::COL_ISBN, WpMaosea0125BookTableMap::COL_NAME, WpMaosea0125BookTableMap::COL_COVER, WpMaosea0125BookTableMap::COL_AUTHOR, WpMaosea0125BookTableMap::COL_PUBLISHER, WpMaosea0125BookTableMap::COL_ORIGINAL_NAME, WpMaosea0125BookTableMap::COL_TRANSLATOR, WpMaosea0125BookTableMap::COL_PUBLISH_DATE, WpMaosea0125BookTableMap::COL_PAGE, WpMaosea0125BookTableMap::COL_PRICE, WpMaosea0125BookTableMap::COL_BINDING, WpMaosea0125BookTableMap::COL_SERIES, WpMaosea0125BookTableMap::COL_DESCRIPTION, WpMaosea0125BookTableMap::COL_AUTHOR_DESCRIPTION, WpMaosea0125BookTableMap::COL_CREATED_AT, WpMaosea0125BookTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id', 'isbn', 'name', 'cover', 'author', 'publisher', 'original_name', 'translator', 'publish_date', 'page', 'price', 'binding', 'series', 'description', 'author_description', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Isbn' => 1, 'Name' => 2, 'Cover' => 3, 'Author' => 4, 'Publisher' => 5, 'OriginalName' => 6, 'Translator' => 7, 'PublishDate' => 8, 'Page' => 9, 'Price' => 10, 'Binding' => 11, 'Series' => 12, 'Description' => 13, 'AuthorDescription' => 14, 'CreatedAt' => 15, 'UpdatedAt' => 16, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'isbn' => 1, 'name' => 2, 'cover' => 3, 'author' => 4, 'publisher' => 5, 'originalName' => 6, 'translator' => 7, 'publishDate' => 8, 'page' => 9, 'price' => 10, 'binding' => 11, 'series' => 12, 'description' => 13, 'authorDescription' => 14, 'createdAt' => 15, 'updatedAt' => 16, ),
        self::TYPE_COLNAME       => array(WpMaosea0125BookTableMap::COL_ID => 0, WpMaosea0125BookTableMap::COL_ISBN => 1, WpMaosea0125BookTableMap::COL_NAME => 2, WpMaosea0125BookTableMap::COL_COVER => 3, WpMaosea0125BookTableMap::COL_AUTHOR => 4, WpMaosea0125BookTableMap::COL_PUBLISHER => 5, WpMaosea0125BookTableMap::COL_ORIGINAL_NAME => 6, WpMaosea0125BookTableMap::COL_TRANSLATOR => 7, WpMaosea0125BookTableMap::COL_PUBLISH_DATE => 8, WpMaosea0125BookTableMap::COL_PAGE => 9, WpMaosea0125BookTableMap::COL_PRICE => 10, WpMaosea0125BookTableMap::COL_BINDING => 11, WpMaosea0125BookTableMap::COL_SERIES => 12, WpMaosea0125BookTableMap::COL_DESCRIPTION => 13, WpMaosea0125BookTableMap::COL_AUTHOR_DESCRIPTION => 14, WpMaosea0125BookTableMap::COL_CREATED_AT => 15, WpMaosea0125BookTableMap::COL_UPDATED_AT => 16, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'isbn' => 1, 'name' => 2, 'cover' => 3, 'author' => 4, 'publisher' => 5, 'original_name' => 6, 'translator' => 7, 'publish_date' => 8, 'page' => 9, 'price' => 10, 'binding' => 11, 'series' => 12, 'description' => 13, 'author_description' => 14, 'created_at' => 15, 'updated_at' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('wp_maosea0125_book');
        $this->setPhpName('WpMaosea0125Book');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\WpMaosea0125Book');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('isbn', 'Isbn', 'VARCHAR', true, 255, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('cover', 'Cover', 'VARCHAR', false, 255, null);
        $this->addColumn('author', 'Author', 'VARCHAR', false, 255, null);
        $this->addColumn('publisher', 'Publisher', 'VARCHAR', false, 255, null);
        $this->addColumn('original_name', 'OriginalName', 'VARCHAR', false, 255, null);
        $this->addColumn('translator', 'Translator', 'VARCHAR', false, 255, null);
        $this->addColumn('publish_date', 'PublishDate', 'VARCHAR', false, 255, null);
        $this->addColumn('page', 'Page', 'VARCHAR', false, 255, null);
        $this->addColumn('price', 'Price', 'VARCHAR', false, 255, null);
        $this->addColumn('binding', 'Binding', 'VARCHAR', false, 255, null);
        $this->addColumn('series', 'Series', 'VARCHAR', false, 255, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', false, null, null);
        $this->addColumn('author_description', 'AuthorDescription', 'LONGVARCHAR', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', 'disable_created_at' => 'false', 'disable_updated_at' => 'false', ),
        );
    } // getBehaviors()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? WpMaosea0125BookTableMap::CLASS_DEFAULT : WpMaosea0125BookTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (WpMaosea0125Book object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = WpMaosea0125BookTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = WpMaosea0125BookTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + WpMaosea0125BookTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WpMaosea0125BookTableMap::OM_CLASS;
            /** @var WpMaosea0125Book $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            WpMaosea0125BookTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = WpMaosea0125BookTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = WpMaosea0125BookTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var WpMaosea0125Book $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WpMaosea0125BookTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_ID);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_ISBN);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_NAME);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_COVER);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_AUTHOR);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_PUBLISHER);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_ORIGINAL_NAME);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_TRANSLATOR);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_PUBLISH_DATE);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_PAGE);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_PRICE);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_BINDING);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_SERIES);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_AUTHOR_DESCRIPTION);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(WpMaosea0125BookTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.isbn');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.cover');
            $criteria->addSelectColumn($alias . '.author');
            $criteria->addSelectColumn($alias . '.publisher');
            $criteria->addSelectColumn($alias . '.original_name');
            $criteria->addSelectColumn($alias . '.translator');
            $criteria->addSelectColumn($alias . '.publish_date');
            $criteria->addSelectColumn($alias . '.page');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.binding');
            $criteria->addSelectColumn($alias . '.series');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.author_description');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(WpMaosea0125BookTableMap::DATABASE_NAME)->getTable(WpMaosea0125BookTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(WpMaosea0125BookTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(WpMaosea0125BookTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new WpMaosea0125BookTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a WpMaosea0125Book or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or WpMaosea0125Book object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WpMaosea0125BookTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \WpMaosea0125Book) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WpMaosea0125BookTableMap::DATABASE_NAME);
            $criteria->add(WpMaosea0125BookTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = WpMaosea0125BookQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            WpMaosea0125BookTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                WpMaosea0125BookTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the wp_maosea0125_book table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return WpMaosea0125BookQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a WpMaosea0125Book or Criteria object.
     *
     * @param mixed               $criteria Criteria or WpMaosea0125Book object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WpMaosea0125BookTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from WpMaosea0125Book object
        }

        if ($criteria->containsKey(WpMaosea0125BookTableMap::COL_ID) && $criteria->keyContainsValue(WpMaosea0125BookTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.WpMaosea0125BookTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = WpMaosea0125BookQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // WpMaosea0125BookTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
WpMaosea0125BookTableMap::buildTableMap();
