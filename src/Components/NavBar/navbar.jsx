import {Text, View, Image, StyleSheet } from 'react-native';

export default function navBar() {
  return (
    <View style={styles.container}>
        <View style={styles.buttonsArea}>
            <View style={styles.buttons}>
                <View style={{ justifyContent: 'center', alignItems: 'center',}}>
                    <Image
                        style={{width: '16vw', height: '16vw', tintColor: '#FFD932'}}
                        source={require('../../../assets/img/NavBar/home.png')}
                    />
                </View>
                <View style={{ justifyContent: 'center', alignItems: 'center',}}>
                    <Image
                        style={{width: '16vw', height: '16vw', tintColor: '#A6A6A6'}}
                        source={require('../../../assets/img/NavBar/ingressos.png')}
                    />
                </View>
                <View style={{ justifyContent: 'center', alignItems: 'center',}}>
                    <Image
                        style={{width: '16vw', height: '16vw', tintColor: '#A6A6A6'}}
                        source={require('../../../assets/img/NavBar/local.png')}
                    />
                </View>
                <View style={{ justifyContent: 'center', alignItems: 'center',}}>
                    <Image
                        style={{width: '16vw', height: '16vw', tintColor: '#A6A6A6'}}
                        source={require('../../../assets/img/NavBar/notif.png')}
                    />
                </View>
                <View style={{ justifyContent: 'center', alignItems: 'center',}}>
                    <Image
                        style={{width: '16vw', height: '16vw', tintColor: '#A6A6A6'}}
                        source={require('../../../assets/img/NavBar/perfil.png')}
                    />
                </View>
            
            </View>
        </View>
    </View>
  );
}

const styles = StyleSheet.create({
    container: {
        backgroundColor: '#fff',
        overflow: "hidden",
        height: '16vw',
        width: '100%',
        position: 'relative',
        bottom: 0,
        justifyContent: 'center',
        alignItems: 'center',
        alignSelf : 'flex-end',
    },

    buttonsArea: {
        flexDirection:'row',
        height: '10vw',
        width: '90%',
        alignSelf: 'center',
        position: 'relative',
        justifyContent: 'center',
        alignItems: 'center',
    },

    buttons: {
        flex: 1,
        flexDirection:'row',
        justifyContent:'space-between',
        alignItems: 'center',
        alignSelf: 'center',
    },
})