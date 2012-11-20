<?php


/**
 * Base class that represents a query for the 'centroatencion' table.
 *
 * 
 *
 * @method     CentroatencionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CentroatencionQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     CentroatencionQuery orderByCalle($order = Criteria::ASC) Order by the calle column
 * @method     CentroatencionQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method     CentroatencionQuery orderByDepto($order = Criteria::ASC) Order by the depto column
 * @method     CentroatencionQuery orderByPiso($order = Criteria::ASC) Order by the piso column
 * @method     CentroatencionQuery orderByLocalidadId($order = Criteria::ASC) Order by the localidad_id column
 *
 * @method     CentroatencionQuery groupById() Group by the id column
 * @method     CentroatencionQuery groupByNombre() Group by the nombre column
 * @method     CentroatencionQuery groupByCalle() Group by the calle column
 * @method     CentroatencionQuery groupByNumero() Group by the numero column
 * @method     CentroatencionQuery groupByDepto() Group by the depto column
 * @method     CentroatencionQuery groupByPiso() Group by the piso column
 * @method     CentroatencionQuery groupByLocalidadId() Group by the localidad_id column
 *
 * @method     CentroatencionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CentroatencionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CentroatencionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CentroatencionQuery leftJoinLocalidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Localidad relation
 * @method     CentroatencionQuery rightJoinLocalidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Localidad relation
 * @method     CentroatencionQuery innerJoinLocalidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Localidad relation
 *
 * @method     CentroatencionQuery leftJoinCentroatencionHasPrestador($relationAlias = null) Adds a LEFT JOIN clause to the query using the CentroatencionHasPrestador relation
 * @method     CentroatencionQuery rightJoinCentroatencionHasPrestador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CentroatencionHasPrestador relation
 * @method     CentroatencionQuery innerJoinCentroatencionHasPrestador($relationAlias = null) Adds a INNER JOIN clause to the query using the CentroatencionHasPrestador relation
 *
 * @method     Centroatencion findOne(PropelPDO $con = null) Return the first Centroatencion matching the query
 * @method     Centroatencion findOneOrCreate(PropelPDO $con = null) Return the first Centroatencion matching the query, or a new Centroatencion object populated from the query conditions when no match is found
 *
 * @method     Centroatencion findOneById(int $id) Return the first Centroatencion filtered by the id column
 * @method     Centroatencion findOneByNombre(string $nombre) Return the first Centroatencion filtered by the nombre column
 * @method     Centroatencion findOneByCalle(string $calle) Return the first Centroatencion filtered by the calle column
 * @method     Centroatencion findOneByNumero(string $numero) Return the first Centroatencion filtered by the numero column
 * @method     Centroatencion findOneByDepto(string $depto) Return the first Centroatencion filtered by the depto column
 * @method     Centroatencion findOneByPiso(int $piso) Return the first Centroatencion filtered by the piso column
 * @method     Centroatencion findOneByLocalidadId(int $localidad_id) Return the first Centroatencion filtered by the localidad_id column
 *
 * @method     array findById(int $id) Return Centroatencion objects filtered by the id column
 * @method     array findByNombre(string $nombre) Return Centroatencion objects filtered by the nombre column
 * @method     array findByCalle(string $calle) Return Centroatencion objects filtered by the calle column
 * @method     array findByNumero(string $numero) Return Centroatencion objects filtered by the numero column
 * @method     array findByDepto(string $depto) Return Centroatencion objects filtered by the depto column
 * @method     array findByPiso(int $piso) Return Centroatencion objects filtered by the piso column
 * @method     array findByLocalidadId(int $localidad_id) Return Centroatencion objects filtered by the localidad_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCentroatencionQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCentroatencionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Centroatencion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CentroatencionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     CentroatencionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CentroatencionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CentroatencionQuery) {
            return $criteria;
        }
        $query = new CentroatencionQuery();
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
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Centroatencion|Centroatencion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CentroatencionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CentroatencionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Centroatencion A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOMBRE`, `CALLE`, `NUMERO`, `DEPTO`, `PISO`, `LOCALIDAD_ID` FROM `centroatencion` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Centroatencion();
            $obj->hydrate($row);
            CentroatencionPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Centroatencion|Centroatencion[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Centroatencion[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CentroatencionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CentroatencionPeer::ID, $keys, Criteria::IN);
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
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(CentroatencionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function filterByNombre($nombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombre)) {
                $nombre = str_replace('*', '%', $nombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CentroatencionPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the calle column
     *
     * Example usage:
     * <code>
     * $query->filterByCalle('fooValue');   // WHERE calle = 'fooValue'
     * $query->filterByCalle('%fooValue%'); // WHERE calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function filterByCalle($calle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calle)) {
                $calle = str_replace('*', '%', $calle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CentroatencionPeer::CALLE, $calle, $comparison);
    }

    /**
     * Filter the query on the numero column
     *
     * Example usage:
     * <code>
     * $query->filterByNumero('fooValue');   // WHERE numero = 'fooValue'
     * $query->filterByNumero('%fooValue%'); // WHERE numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numero)) {
                $numero = str_replace('*', '%', $numero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CentroatencionPeer::NUMERO, $numero, $comparison);
    }

    /**
     * Filter the query on the depto column
     *
     * Example usage:
     * <code>
     * $query->filterByDepto('fooValue');   // WHERE depto = 'fooValue'
     * $query->filterByDepto('%fooValue%'); // WHERE depto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function filterByDepto($depto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depto)) {
                $depto = str_replace('*', '%', $depto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CentroatencionPeer::DEPTO, $depto, $comparison);
    }

    /**
     * Filter the query on the piso column
     *
     * Example usage:
     * <code>
     * $query->filterByPiso(1234); // WHERE piso = 1234
     * $query->filterByPiso(array(12, 34)); // WHERE piso IN (12, 34)
     * $query->filterByPiso(array('min' => 12)); // WHERE piso > 12
     * </code>
     *
     * @param     mixed $piso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function filterByPiso($piso = null, $comparison = null)
    {
        if (is_array($piso)) {
            $useMinMax = false;
            if (isset($piso['min'])) {
                $this->addUsingAlias(CentroatencionPeer::PISO, $piso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($piso['max'])) {
                $this->addUsingAlias(CentroatencionPeer::PISO, $piso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CentroatencionPeer::PISO, $piso, $comparison);
    }

    /**
     * Filter the query on the localidad_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalidadId(1234); // WHERE localidad_id = 1234
     * $query->filterByLocalidadId(array(12, 34)); // WHERE localidad_id IN (12, 34)
     * $query->filterByLocalidadId(array('min' => 12)); // WHERE localidad_id > 12
     * </code>
     *
     * @see       filterByLocalidad()
     *
     * @param     mixed $localidadId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function filterByLocalidadId($localidadId = null, $comparison = null)
    {
        if (is_array($localidadId)) {
            $useMinMax = false;
            if (isset($localidadId['min'])) {
                $this->addUsingAlias(CentroatencionPeer::LOCALIDAD_ID, $localidadId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($localidadId['max'])) {
                $this->addUsingAlias(CentroatencionPeer::LOCALIDAD_ID, $localidadId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CentroatencionPeer::LOCALIDAD_ID, $localidadId, $comparison);
    }

    /**
     * Filter the query by a related Localidad object
     *
     * @param   Localidad|PropelObjectCollection $localidad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CentroatencionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByLocalidad($localidad, $comparison = null)
    {
        if ($localidad instanceof Localidad) {
            return $this
                ->addUsingAlias(CentroatencionPeer::LOCALIDAD_ID, $localidad->getId(), $comparison);
        } elseif ($localidad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CentroatencionPeer::LOCALIDAD_ID, $localidad->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByLocalidad() only accepts arguments of type Localidad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Localidad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function joinLocalidad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Localidad');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Localidad');
        }

        return $this;
    }

    /**
     * Use the Localidad relation Localidad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LocalidadQuery A secondary query class using the current class as primary query
     */
    public function useLocalidadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLocalidad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Localidad', 'LocalidadQuery');
    }

    /**
     * Filter the query by a related CentroatencionHasPrestador object
     *
     * @param   CentroatencionHasPrestador|PropelObjectCollection $centroatencionHasPrestador  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CentroatencionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCentroatencionHasPrestador($centroatencionHasPrestador, $comparison = null)
    {
        if ($centroatencionHasPrestador instanceof CentroatencionHasPrestador) {
            return $this
                ->addUsingAlias(CentroatencionPeer::ID, $centroatencionHasPrestador->getCentroatencionId(), $comparison);
        } elseif ($centroatencionHasPrestador instanceof PropelObjectCollection) {
            return $this
                ->useCentroatencionHasPrestadorQuery()
                ->filterByPrimaryKeys($centroatencionHasPrestador->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCentroatencionHasPrestador() only accepts arguments of type CentroatencionHasPrestador or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CentroatencionHasPrestador relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function joinCentroatencionHasPrestador($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CentroatencionHasPrestador');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CentroatencionHasPrestador');
        }

        return $this;
    }

    /**
     * Use the CentroatencionHasPrestador relation CentroatencionHasPrestador object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CentroatencionHasPrestadorQuery A secondary query class using the current class as primary query
     */
    public function useCentroatencionHasPrestadorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCentroatencionHasPrestador($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CentroatencionHasPrestador', 'CentroatencionHasPrestadorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Centroatencion $centroatencion Object to remove from the list of results
     *
     * @return CentroatencionQuery The current query, for fluid interface
     */
    public function prune($centroatencion = null)
    {
        if ($centroatencion) {
            $this->addUsingAlias(CentroatencionPeer::ID, $centroatencion->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseCentroatencionQuery