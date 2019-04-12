how_many () {
  RUNNING_CONTAINERS=$(docker ps -q | wc -l)
}
how_many
while [ $RUNNING_CONTAINERS -gt 1 ]; do
  echo -e "RUNNING TESTS\ncontainers running: $RUNNING_CONTAINERS"
  sleep 10;
  how_many
done
echo "tests have finished! stopping selenium..."

# determine if there were failures
FAIL_FILE="./dev/tests/acceptance/tests/_output/failed"
if [ -f $FAIL_FILE ]; then
    echo "there were failed tests!"
    cat $FAIL_FILE
    exit 1
fi

exit 0
