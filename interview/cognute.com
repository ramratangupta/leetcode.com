
class DatabseConnection:
	static connection = {}
	def connect(dbname):
		if connection.has(dbname) connection[dbname] !=None:
			connection[dbname] = MsqlConnectionClass(dbname=dbname)
		return connection[connection]


con1 = DatabseConnection::

create connection pool
create python midile ware

