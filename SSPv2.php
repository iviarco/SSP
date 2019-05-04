SSPv2 chaining

<?php


$ssp = new SSP;

$make = $ssp->table('expense')
->column( 'expense.Date')
->column( 'item.Description')
->column( 'category.CategoryName')
->column( 'expense.Amount')
->column( 'status.Status')
->column( 'user.LastName')
->column( 'expense.Note')
->join( 'item', 'ItemId', 'expense')
->join( 'category', 'CategoryId', 'item')
->join( 'status', 'StatusId', 'expense')
->join( 'user', 'UserId', 'expense')
->join( 'companybranch', 'CompanyBranchId', 'expense')
->where( 'expense.StatusId' => 18);


$make = $ssp->make(function($self) {
	$self->table('expense')
	->column( 'expense.Date')
	->column( 'item.Description')
	->column( 'category.CategoryName')
	->column( 'expense.Amount')
	->column( 'status.Status')
	->column( 'user.LastName')
	->column( 'expense.Note')
	->join( 'item', 'ItemId', 'expense')
	->join( 'category', 'CategoryId', 'item')
	->join( 'status', 'StatusId', 'expense')
	->join( 'user', 'UserId', 'expense')
	->join( 'companybranch', 'CompanyBranchId', 'expense')
	->where( 'expense.StatusId' => 18);
}

$sql = $make->SQL_DISPLAY();
$data = $make->OUTPUT();

?>