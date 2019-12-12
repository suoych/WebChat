```shell
./model_optimize_tool \
    --model_dir=./ssd_mobilenet_v1_pascalvoc \
    --model_file="" \
    --param_file="" \
    --optimize_out_type=naive_buffer \
    --optimize_out=./ssd_mobilenet_v1_pascalvoc.nb \
    --valid_targets=arm \
    --prefer_int8_kernel=false \
    --record_tailoring_info=false
```
