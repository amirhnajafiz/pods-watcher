package config

type (
	Rule struct {
		Name   string            `koanf:"name"`
		CPU    float64           `koanf:"cpu"`
		RAM    float64           `koanf:"ram"`
		Labels map[string]string `koanf:"labels"`
	}

	Config struct {
		Rules []Rule `koanf:"rules"`
	}
)
