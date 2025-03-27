<?php

namespace RbSerin\DB2\Database\Query;


class Builder extends \Illuminate\Database\Query\Builder
{
    /**
     * Get the SQL representation of the query.
     *
     * @return string
     */
    public function toSql()
    {
        return parent::toSql();
    }

}
