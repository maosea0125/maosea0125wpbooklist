<?php

namespace Base;

use \WpMaosea0125Book as ChildWpMaosea0125Book;
use \WpMaosea0125BookQuery as ChildWpMaosea0125BookQuery;
use \Exception;
use \PDO;
use Map\WpMaosea0125BookTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'wp_maosea0125_book' table.
 *
 *
 *
 * @method     ChildWpMaosea0125BookQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildWpMaosea0125BookQuery orderByIsbn($order = Criteria::ASC) Order by the isbn column
 * @method     ChildWpMaosea0125BookQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildWpMaosea0125BookQuery orderByCover($order = Criteria::ASC) Order by the cover column
 * @method     ChildWpMaosea0125BookQuery orderByAuthor($order = Criteria::ASC) Order by the author column
 * @method     ChildWpMaosea0125BookQuery orderByPublisher($order = Criteria::ASC) Order by the publisher column
 * @method     ChildWpMaosea0125BookQuery orderByOriginalName($order = Criteria::ASC) Order by the original_name column
 * @method     ChildWpMaosea0125BookQuery orderByTranslator($order = Criteria::ASC) Order by the translator column
 * @method     ChildWpMaosea0125BookQuery orderByPublishDate($order = Criteria::ASC) Order by the publish_date column
 * @method     ChildWpMaosea0125BookQuery orderByPage($order = Criteria::ASC) Order by the page column
 * @method     ChildWpMaosea0125BookQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     ChildWpMaosea0125BookQuery orderByBinding($order = Criteria::ASC) Order by the binding column
 * @method     ChildWpMaosea0125BookQuery orderBySeries($order = Criteria::ASC) Order by the series column
 * @method     ChildWpMaosea0125BookQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildWpMaosea0125BookQuery orderByAuthorDescription($order = Criteria::ASC) Order by the author_description column
 * @method     ChildWpMaosea0125BookQuery orderByBuylink($order = Criteria::ASC) Order by the buylink column
 * @method     ChildWpMaosea0125BookQuery orderByDoubanScore($order = Criteria::ASC) Order by the douban_score column
 * @method     ChildWpMaosea0125BookQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildWpMaosea0125BookQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildWpMaosea0125BookQuery groupById() Group by the id column
 * @method     ChildWpMaosea0125BookQuery groupByIsbn() Group by the isbn column
 * @method     ChildWpMaosea0125BookQuery groupByName() Group by the name column
 * @method     ChildWpMaosea0125BookQuery groupByCover() Group by the cover column
 * @method     ChildWpMaosea0125BookQuery groupByAuthor() Group by the author column
 * @method     ChildWpMaosea0125BookQuery groupByPublisher() Group by the publisher column
 * @method     ChildWpMaosea0125BookQuery groupByOriginalName() Group by the original_name column
 * @method     ChildWpMaosea0125BookQuery groupByTranslator() Group by the translator column
 * @method     ChildWpMaosea0125BookQuery groupByPublishDate() Group by the publish_date column
 * @method     ChildWpMaosea0125BookQuery groupByPage() Group by the page column
 * @method     ChildWpMaosea0125BookQuery groupByPrice() Group by the price column
 * @method     ChildWpMaosea0125BookQuery groupByBinding() Group by the binding column
 * @method     ChildWpMaosea0125BookQuery groupBySeries() Group by the series column
 * @method     ChildWpMaosea0125BookQuery groupByDescription() Group by the description column
 * @method     ChildWpMaosea0125BookQuery groupByAuthorDescription() Group by the author_description column
 * @method     ChildWpMaosea0125BookQuery groupByBuylink() Group by the buylink column
 * @method     ChildWpMaosea0125BookQuery groupByDoubanScore() Group by the douban_score column
 * @method     ChildWpMaosea0125BookQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildWpMaosea0125BookQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildWpMaosea0125BookQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWpMaosea0125BookQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWpMaosea0125BookQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWpMaosea0125BookQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWpMaosea0125BookQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWpMaosea0125BookQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWpMaosea0125Book findOne(ConnectionInterface $con = null) Return the first ChildWpMaosea0125Book matching the query
 * @method     ChildWpMaosea0125Book findOneOrCreate(ConnectionInterface $con = null) Return the first ChildWpMaosea0125Book matching the query, or a new ChildWpMaosea0125Book object populated from the query conditions when no match is found
 *
 * @method     ChildWpMaosea0125Book findOneById(int $id) Return the first ChildWpMaosea0125Book filtered by the id column
 * @method     ChildWpMaosea0125Book findOneByIsbn(string $isbn) Return the first ChildWpMaosea0125Book filtered by the isbn column
 * @method     ChildWpMaosea0125Book findOneByName(string $name) Return the first ChildWpMaosea0125Book filtered by the name column
 * @method     ChildWpMaosea0125Book findOneByCover(string $cover) Return the first ChildWpMaosea0125Book filtered by the cover column
 * @method     ChildWpMaosea0125Book findOneByAuthor(string $author) Return the first ChildWpMaosea0125Book filtered by the author column
 * @method     ChildWpMaosea0125Book findOneByPublisher(string $publisher) Return the first ChildWpMaosea0125Book filtered by the publisher column
 * @method     ChildWpMaosea0125Book findOneByOriginalName(string $original_name) Return the first ChildWpMaosea0125Book filtered by the original_name column
 * @method     ChildWpMaosea0125Book findOneByTranslator(string $translator) Return the first ChildWpMaosea0125Book filtered by the translator column
 * @method     ChildWpMaosea0125Book findOneByPublishDate(string $publish_date) Return the first ChildWpMaosea0125Book filtered by the publish_date column
 * @method     ChildWpMaosea0125Book findOneByPage(string $page) Return the first ChildWpMaosea0125Book filtered by the page column
 * @method     ChildWpMaosea0125Book findOneByPrice(string $price) Return the first ChildWpMaosea0125Book filtered by the price column
 * @method     ChildWpMaosea0125Book findOneByBinding(string $binding) Return the first ChildWpMaosea0125Book filtered by the binding column
 * @method     ChildWpMaosea0125Book findOneBySeries(string $series) Return the first ChildWpMaosea0125Book filtered by the series column
 * @method     ChildWpMaosea0125Book findOneByDescription(string $description) Return the first ChildWpMaosea0125Book filtered by the description column
 * @method     ChildWpMaosea0125Book findOneByAuthorDescription(string $author_description) Return the first ChildWpMaosea0125Book filtered by the author_description column
 * @method     ChildWpMaosea0125Book findOneByBuylink(string $buylink) Return the first ChildWpMaosea0125Book filtered by the buylink column
 * @method     ChildWpMaosea0125Book findOneByDoubanScore(string $douban_score) Return the first ChildWpMaosea0125Book filtered by the douban_score column
 * @method     ChildWpMaosea0125Book findOneByCreatedAt(string $created_at) Return the first ChildWpMaosea0125Book filtered by the created_at column
 * @method     ChildWpMaosea0125Book findOneByUpdatedAt(string $updated_at) Return the first ChildWpMaosea0125Book filtered by the updated_at column *

 * @method     ChildWpMaosea0125Book requirePk($key, ConnectionInterface $con = null) Return the ChildWpMaosea0125Book by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOne(ConnectionInterface $con = null) Return the first ChildWpMaosea0125Book matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWpMaosea0125Book requireOneById(int $id) Return the first ChildWpMaosea0125Book filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByIsbn(string $isbn) Return the first ChildWpMaosea0125Book filtered by the isbn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByName(string $name) Return the first ChildWpMaosea0125Book filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByCover(string $cover) Return the first ChildWpMaosea0125Book filtered by the cover column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByAuthor(string $author) Return the first ChildWpMaosea0125Book filtered by the author column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByPublisher(string $publisher) Return the first ChildWpMaosea0125Book filtered by the publisher column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByOriginalName(string $original_name) Return the first ChildWpMaosea0125Book filtered by the original_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByTranslator(string $translator) Return the first ChildWpMaosea0125Book filtered by the translator column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByPublishDate(string $publish_date) Return the first ChildWpMaosea0125Book filtered by the publish_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByPage(string $page) Return the first ChildWpMaosea0125Book filtered by the page column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByPrice(string $price) Return the first ChildWpMaosea0125Book filtered by the price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByBinding(string $binding) Return the first ChildWpMaosea0125Book filtered by the binding column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneBySeries(string $series) Return the first ChildWpMaosea0125Book filtered by the series column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByDescription(string $description) Return the first ChildWpMaosea0125Book filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByAuthorDescription(string $author_description) Return the first ChildWpMaosea0125Book filtered by the author_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByBuylink(string $buylink) Return the first ChildWpMaosea0125Book filtered by the buylink column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByDoubanScore(string $douban_score) Return the first ChildWpMaosea0125Book filtered by the douban_score column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByCreatedAt(string $created_at) Return the first ChildWpMaosea0125Book filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWpMaosea0125Book requireOneByUpdatedAt(string $updated_at) Return the first ChildWpMaosea0125Book filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWpMaosea0125Book[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildWpMaosea0125Book objects based on current ModelCriteria
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findById(int $id) Return ChildWpMaosea0125Book objects filtered by the id column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByIsbn(string $isbn) Return ChildWpMaosea0125Book objects filtered by the isbn column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByName(string $name) Return ChildWpMaosea0125Book objects filtered by the name column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByCover(string $cover) Return ChildWpMaosea0125Book objects filtered by the cover column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByAuthor(string $author) Return ChildWpMaosea0125Book objects filtered by the author column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByPublisher(string $publisher) Return ChildWpMaosea0125Book objects filtered by the publisher column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByOriginalName(string $original_name) Return ChildWpMaosea0125Book objects filtered by the original_name column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByTranslator(string $translator) Return ChildWpMaosea0125Book objects filtered by the translator column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByPublishDate(string $publish_date) Return ChildWpMaosea0125Book objects filtered by the publish_date column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByPage(string $page) Return ChildWpMaosea0125Book objects filtered by the page column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByPrice(string $price) Return ChildWpMaosea0125Book objects filtered by the price column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByBinding(string $binding) Return ChildWpMaosea0125Book objects filtered by the binding column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findBySeries(string $series) Return ChildWpMaosea0125Book objects filtered by the series column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByDescription(string $description) Return ChildWpMaosea0125Book objects filtered by the description column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByAuthorDescription(string $author_description) Return ChildWpMaosea0125Book objects filtered by the author_description column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByBuylink(string $buylink) Return ChildWpMaosea0125Book objects filtered by the buylink column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByDoubanScore(string $douban_score) Return ChildWpMaosea0125Book objects filtered by the douban_score column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildWpMaosea0125Book objects filtered by the created_at column
 * @method     ChildWpMaosea0125Book[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildWpMaosea0125Book objects filtered by the updated_at column
 * @method     ChildWpMaosea0125Book[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class WpMaosea0125BookQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\WpMaosea0125BookQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\WpMaosea0125Book', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWpMaosea0125BookQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWpMaosea0125BookQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildWpMaosea0125BookQuery) {
            return $criteria;
        }
        $query = new ChildWpMaosea0125BookQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildWpMaosea0125Book|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(WpMaosea0125BookTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = WpMaosea0125BookTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildWpMaosea0125Book A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, isbn, name, cover, author, publisher, original_name, translator, publish_date, page, price, binding, series, description, author_description, buylink, douban_score, created_at, updated_at FROM wp_maosea0125_book WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildWpMaosea0125Book $obj */
            $obj = new ChildWpMaosea0125Book();
            $obj->hydrate($row);
            WpMaosea0125BookTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildWpMaosea0125Book|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(WpMaosea0125BookTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(WpMaosea0125BookTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the isbn column
     *
     * Example usage:
     * <code>
     * $query->filterByIsbn('fooValue');   // WHERE isbn = 'fooValue'
     * $query->filterByIsbn('%fooValue%', Criteria::LIKE); // WHERE isbn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isbn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByIsbn($isbn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isbn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_ISBN, $isbn, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the cover column
     *
     * Example usage:
     * <code>
     * $query->filterByCover('fooValue');   // WHERE cover = 'fooValue'
     * $query->filterByCover('%fooValue%', Criteria::LIKE); // WHERE cover LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cover The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByCover($cover = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cover)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_COVER, $cover, $comparison);
    }

    /**
     * Filter the query on the author column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthor('fooValue');   // WHERE author = 'fooValue'
     * $query->filterByAuthor('%fooValue%', Criteria::LIKE); // WHERE author LIKE '%fooValue%'
     * </code>
     *
     * @param     string $author The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByAuthor($author = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($author)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_AUTHOR, $author, $comparison);
    }

    /**
     * Filter the query on the publisher column
     *
     * Example usage:
     * <code>
     * $query->filterByPublisher('fooValue');   // WHERE publisher = 'fooValue'
     * $query->filterByPublisher('%fooValue%', Criteria::LIKE); // WHERE publisher LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publisher The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByPublisher($publisher = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publisher)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_PUBLISHER, $publisher, $comparison);
    }

    /**
     * Filter the query on the original_name column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalName('fooValue');   // WHERE original_name = 'fooValue'
     * $query->filterByOriginalName('%fooValue%', Criteria::LIKE); // WHERE original_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originalName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByOriginalName($originalName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($originalName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_ORIGINAL_NAME, $originalName, $comparison);
    }

    /**
     * Filter the query on the translator column
     *
     * Example usage:
     * <code>
     * $query->filterByTranslator('fooValue');   // WHERE translator = 'fooValue'
     * $query->filterByTranslator('%fooValue%', Criteria::LIKE); // WHERE translator LIKE '%fooValue%'
     * </code>
     *
     * @param     string $translator The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByTranslator($translator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($translator)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_TRANSLATOR, $translator, $comparison);
    }

    /**
     * Filter the query on the publish_date column
     *
     * Example usage:
     * <code>
     * $query->filterByPublishDate('fooValue');   // WHERE publish_date = 'fooValue'
     * $query->filterByPublishDate('%fooValue%', Criteria::LIKE); // WHERE publish_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publishDate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByPublishDate($publishDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publishDate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_PUBLISH_DATE, $publishDate, $comparison);
    }

    /**
     * Filter the query on the page column
     *
     * Example usage:
     * <code>
     * $query->filterByPage('fooValue');   // WHERE page = 'fooValue'
     * $query->filterByPage('%fooValue%', Criteria::LIKE); // WHERE page LIKE '%fooValue%'
     * </code>
     *
     * @param     string $page The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByPage($page = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($page)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_PAGE, $page, $comparison);
    }

    /**
     * Filter the query on the price column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice('fooValue');   // WHERE price = 'fooValue'
     * $query->filterByPrice('%fooValue%', Criteria::LIKE); // WHERE price LIKE '%fooValue%'
     * </code>
     *
     * @param     string $price The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($price)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the binding column
     *
     * Example usage:
     * <code>
     * $query->filterByBinding('fooValue');   // WHERE binding = 'fooValue'
     * $query->filterByBinding('%fooValue%', Criteria::LIKE); // WHERE binding LIKE '%fooValue%'
     * </code>
     *
     * @param     string $binding The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByBinding($binding = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($binding)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_BINDING, $binding, $comparison);
    }

    /**
     * Filter the query on the series column
     *
     * Example usage:
     * <code>
     * $query->filterBySeries('fooValue');   // WHERE series = 'fooValue'
     * $query->filterBySeries('%fooValue%', Criteria::LIKE); // WHERE series LIKE '%fooValue%'
     * </code>
     *
     * @param     string $series The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterBySeries($series = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($series)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_SERIES, $series, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the author_description column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthorDescription('fooValue');   // WHERE author_description = 'fooValue'
     * $query->filterByAuthorDescription('%fooValue%', Criteria::LIKE); // WHERE author_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authorDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByAuthorDescription($authorDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authorDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_AUTHOR_DESCRIPTION, $authorDescription, $comparison);
    }

    /**
     * Filter the query on the buylink column
     *
     * Example usage:
     * <code>
     * $query->filterByBuylink('fooValue');   // WHERE buylink = 'fooValue'
     * $query->filterByBuylink('%fooValue%', Criteria::LIKE); // WHERE buylink LIKE '%fooValue%'
     * </code>
     *
     * @param     string $buylink The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByBuylink($buylink = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($buylink)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_BUYLINK, $buylink, $comparison);
    }

    /**
     * Filter the query on the douban_score column
     *
     * Example usage:
     * <code>
     * $query->filterByDoubanScore('fooValue');   // WHERE douban_score = 'fooValue'
     * $query->filterByDoubanScore('%fooValue%', Criteria::LIKE); // WHERE douban_score LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doubanScore The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByDoubanScore($doubanScore = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doubanScore)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_DOUBAN_SCORE, $doubanScore, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(WpMaosea0125BookTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(WpMaosea0125BookTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(WpMaosea0125BookTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(WpMaosea0125BookTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildWpMaosea0125Book $wpMaosea0125Book Object to remove from the list of results
     *
     * @return $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function prune($wpMaosea0125Book = null)
    {
        if ($wpMaosea0125Book) {
            $this->addUsingAlias(WpMaosea0125BookTableMap::COL_ID, $wpMaosea0125Book->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the wp_maosea0125_book table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WpMaosea0125BookTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WpMaosea0125BookTableMap::clearInstancePool();
            WpMaosea0125BookTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WpMaosea0125BookTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(WpMaosea0125BookTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            WpMaosea0125BookTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            WpMaosea0125BookTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(WpMaosea0125BookTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(WpMaosea0125BookTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(WpMaosea0125BookTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(WpMaosea0125BookTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildWpMaosea0125BookQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(WpMaosea0125BookTableMap::COL_CREATED_AT);
    }

} // WpMaosea0125BookQuery
