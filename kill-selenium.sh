how_many () {
  RUNNING_CONTAINERS=$(docker ps -q | wc -l)
}
how_many
while [ $RUNNING_CONTAINERS -gt 1 ]; do
  echo "how many $RUNNING_CONTAINERS"
  sleep 10;
  how_many
done
echo "tests have finished! stopping selenium..."
exit
